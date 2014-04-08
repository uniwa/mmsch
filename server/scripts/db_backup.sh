now = $(date +"%Y-%m-%d")
filename = "mmsch@localhost_$Date.sql"
/usr/local/mysql/bin/mysqldump --add-drop-table -u root mmsch > $filename

