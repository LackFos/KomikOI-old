module.exports = {
   'globals': {
      '$': true
   },
   'env': {
      'browser': true,
      'es2021': true
   },
   'extends': 'eslint:recommended',
   'overrides': [],
   'parserOptions': {
      'ecmaVersion': 'latest',
      'sourceType': 'module'
   },
   'rules': {
      'semi': 'error',
      'quotes': ['error', 'single'], 
      'indent': ['error', 3],
      'no-unused-vars': 'warn'
   }
};