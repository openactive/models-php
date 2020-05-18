# Updating models

A convenience script has been provided, `./update-models.sh`.

The process that's been automated here is roughly as follows:

```bash
# install and get the generator into place
git clone https://github.com/openactive/models-lib vendor/models-lib
cd vendor/models-lib
npm install

# generate models
npm run app-dev -- generate PHP --destination ../../src/

cd ../..
# fix syntax / linting
composer fix src/models
composer fix src/enums

# run tests
composer test

# add the newly generated models
git add src/models src/enums
```

The next step is to commit it, and tag a release. 

```bash
git commit -m 'Model update'
git push # push up new branch
```

## Releasing
Packagist releases use git tags, all that's needed here is to do a git tag and it'll automatically deploy.
```bash
git tag -l # to see existing tags
git tag v0.0.0 # tag a version up from latest
git push origin v0.0.0 # push up new tag
```

## Dependant libraries
Dependants will also need updating so as to not have version conflicts.
### [dataset-site-template](https://github.com/openactive/dataset-site-template-php)
```bash
git clone https://github.com/openactive/dataset-site-template-php
cd  dataset-site-template-php
composer require openactive/models
git add composer.*
git commit -m 'Update models dep'
git push
git tag v0.0.0
git push origin v0.0.0
```
