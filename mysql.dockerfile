FROM mysql

COPY database.sql /docker-entrypoint-initdb.d/ 

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["mysqld"]
