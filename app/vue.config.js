module.exports = { 
    
    // other webpack options to merge in ... 
    configureWebpack: { 
    
    }, 
    // devServer Options don't belong into `configureWebpack` 
    devServer: { 
        host: '0.0.0.0', 
        hot: true, 
        disableHostCheck: true, 
    },
};

