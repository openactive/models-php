#!/usr/bin/env bash
set -euo pipefail

RED='\033[0;31m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Colour

BASE_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )";

MODELS_LIB_DIR="${BASE_DIR}/vendor/models-lib";
TARGET_DIR="${BASE_DIR}/src";
GENERATED_DIRS=("${TARGET_DIR}/Models" "${TARGET_DIR}/Enums");

mkdir -p "$(dirname "${MODELS_LIB_DIR}")";
if [[ ! -d "${MODELS_LIB_DIR}" ]]; then
  git clone https://github.com/openactive/models-lib "${MODELS_LIB_DIR}";
fi

(
  cd "${MODELS_LIB_DIR}";
  command -v nvm && nvm use;
  npx check-node-version --node $(cat .nvmrc) || (
    >&2 echo -e "${YELLOW}OpenActive: ${RED}Please install and activate Node $(cat .nvmrc), ${YELLOW}nvm${RED} is recommended.${NC}" && exit 1
  );

  if [[ $(git rev-parse --abbrev-ref HEAD) == "master" ]]; then
    git pull;
    npm install;
  fi
  rm -rf "${GENERATED_DIRS[@]}";
  npm run app-dev -- generate PHP --destination "${TARGET_DIR}";
)

COMPOSER_BIN=$(command -v composer || command -v composer.phar || command -v ./composer.phar);

for dir in ${GENERATED_DIRS[@]}; do
  "${COMPOSER_BIN}" fix "${dir}" || true;
done
"${COMPOSER_BIN}" test;

git add "${GENERATED_DIRS}";
