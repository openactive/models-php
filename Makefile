.PHONY :

lint_codestyle:
	./vendor/bin/php-cs-fixer fix --dry-run src

fix_codestyle:
	./vendor/bin/php-cs-fixer fix src

lint_phan:
	./vendor/bin/phan

lint: lint_codestyle lint_phan

fix: fix_codestyle

# some of the tools are lint only
lint_fix: fix_codestyle lint_phan