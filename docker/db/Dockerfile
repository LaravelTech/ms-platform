#
# mysql:5.7
#
FROM mysql:5.7
MAINTAINER tomotaka777

#
# copy and chmod cnf file
#

COPY conf/my.cnf /etc/mysql/
RUN chmod 644 /etc/mysql/my.cnf

COPY conf/.login.cnf /etc/mysql/
RUN chmod 644 /etc/mysql/.login.cnf

#
# set timezone
#
RUN /bin/cp -f /usr/share/zoneinfo/Asia/Tokyo /etc/localtime
