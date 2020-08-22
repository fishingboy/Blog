#! /bin/sh

# 輸入帳密
read -p "MySQL User : " user         
read -p "MySQL Password:  " password

# 建立資料庫
sql="CREATE DATABASE IF NOT EXISTS blog \
CHARACTER SET utf8mb4 \
COLLATE utf8mb4_unicode_ci"

echo
echo mysql -u ${user} -p${password} -e "${sql}";
echo

mysql -u ${user} -p${password} -e "${sql}";

# 檢查 git fetch 是否成功
if [ "$?" == "0" ]; then
    echo "Create Datebase [blog] Success !!!"
fi

