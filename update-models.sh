#!/usr/bin/env bash

BASE_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )";
MODELS_LIB_DIR="${BASE_DIR}/vendor/models-lib"

if [[ ! -d "${MODELS_LIB_DIR}" ]]; then
  git clone https://github.com/openactive/models-lib "${MODELS_LIB_DIR}"
fi

(
  cd "${MODELS_LIB_DIR}"
  command -v nvm && nvm use

  if [[ $(git rev-parse --abbrev-ref HEAD) == "master" ]]; then
    git pull
    npm install
  fi
  rm -rf "${BASE_DIR}/src/Models" "${BASE_DIR}/src/Enums"
  npm run app-dev -- generate PHP --destination "${BASE_DIR}/src"
)

COMPOSER_BIN=$(command -v composer || command -v composer.phar || command -v ./composer.phar)

"${COMPOSER_BIN}" fix "${BASE_DIR}/src/models"
"${COMPOSER_BIN}" fix "${BASE_DIR}/src/enums"

"${COMPOSER_BIN}" test

git add "${BASE_DIR}/src/models" "${BASE_DIR}/src/enums"
