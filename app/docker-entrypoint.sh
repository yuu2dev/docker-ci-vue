cd $APP_VIRTUAL

if [ $APP_MODE == "PROD" ]; then
    npm install
    #npm install -g @vue/cli
    #npm run build
else 
    npm install
    npm install -g @vue/cli
    npm run serve
fi


