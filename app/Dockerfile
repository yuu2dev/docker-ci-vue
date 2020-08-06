FROM node:lts-alpine

RUN apk update && apk add --no-cache \
    vim
    
ARG APP_VIRTUAL
ENV APP_VIRTUAL ${APP_VIRTUAL}

WORKDIR ${APP_VIRTUAL}

COPY package*.json ${APP_VIRTUAL}/
COPY docker-entrypoint.sh ${APP_VIRTUAL}/

EXPOSE 8080

ENTRYPOINT [ "sh", "-c", "${APP_VIRTUAL}/docker-entrypoint.sh" ]
