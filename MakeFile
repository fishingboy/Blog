#For Development

BRANCH := $(shell git name-rev --name-only HEAD)

# 專案初始的安裝
install:
	@echo "Copy database.sample.php -> database.php"
	cp ./application/config/database.sample.php ./application/config/database.php
	@echo "Composer Install ..."
	composer install
	@echo "Create Database blog ..."
	bash ./resources/shell_script/create_database.sh
	@echo run migrations
	make migrate

# migrate refresh (全部 rollback 再全部 migrate)
migrate-refresh:
	php index.php migration refresh

# migrate
migrate:
	php index.php migration migrate

# migrate
rollback:
	php index.php migration rollback

# 專案必要的資料
init-seeder:

# 測試資料
test-seeder: init-seeder

# 清除所有表格資料
truncate:
	@echo "清除所有表格資料:"
	@echo ""
	php index.php seeder run Truncate_seeder
	@echo "------------------------------------------------------"

pull:
	@echo ">>> Pull Code on Current branch [$(BRANCH)]"
	git pull origin $(BRANCH)

push:
	@echo ">>> Current branch [$(BRANCH)] Pushing Code"
	git push origin $(BRANCH)

test:
	@echo ">>> Test"
	phpunit7 --exclude-group ignore --testdox

test-report:
	@echo ">>> Test w/ Code Coverage report"
	phpunit7 --coverage-html ./application/tests/phpunit-coverage --exclude-group ignore
