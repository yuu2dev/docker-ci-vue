FROM nginx:alpine

RUN apk update && apk add --no-cache \
    vim

COPY nginx.conf.template /etc/nginx/

ENV S '$'

CMD ["/bin/sh" , "-c" , "envsubst < /etc/nginx/nginx.conf.template > /etc/nginx/nginx.conf && exec nginx -g 'daemon off;'"]

EXPOSE 80 8000