#!/usr/bin/env bash

export BASE_DIR=$(pwd);

if [[ ! -d models-lib ]]; then
  git clone https://github.com/openactive/models-lib "${BASE_DIR}/vendor/models-lib"
fi

(
  cd models-lib

  if [[ $(git rev-parse --abbrev-ref HEAD) == "master" ]]; then
    git pull
    npm install
  fi
  rm -rf "${BASE_DIR}/src/Models" "${BASE_DIR}/src/Enums"
  npm run app-dev -- generate PHP --destination "${BASE_DIR}/src"
)

export COMPOSER_BIN=$(command -v composer || command -v composer.phar || command -v ./composer.phar)

"${COMPOSER_BIN}" fix "${BASE_DIR}/src/models"
"${COMPOSER_BIN}" fix "${BASE_DIR}/src/enums"

"${COMPOSER_BIN}" test

git add "${BASE_DIR}/src/models" "${BASE_DIR}/src/enums"
