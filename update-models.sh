#!/usr/bin/env bash

if [[ ! -d models-lib ]]; then
  git clone https://github.com/openactive/models-lib
fi

(
  cd models-lib

  if [[ $(git rev-parse --abbrev-ref HEAD) == "master" ]]; then
    git pull
    npm install
  fi
  rm -rf ../src/Models ../src/Enums
  npm run app-dev -- generate PHP --destination ../src/
)

export COMPOSER_BIN=$(command -v composer || command -v composer.phar || command -v ./composer.phar)

"${COMPOSER_BIN}" fix src/models
"${COMPOSER_BIN}" fix src/enums

"${COMPOSER_BIN}" test

git add src/models src/enums
