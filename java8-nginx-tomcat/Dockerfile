From tomcat:8.5.73-jre8-temurin-focal
RUN rm -rf /usr/local/tomcat/webapps/*
COPY ./www/*.war /usr/local/tomcat/webapps/ROOT.war
CMD ["catalina.sh","run"]
