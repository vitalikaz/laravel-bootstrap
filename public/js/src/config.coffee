class @Config
  @$inject: ['$stateProvider', '$urlRouterProvider']
  constructor: (@state, @urlRouter) ->
    viewsPath = '/views/'

    @urlRouter.when '', '/'
    @urlRouter.otherwise '/not-found'

    @state
    .state 'home',
      url: '/'
      templateUrl: "#{viewsPath}/hello.html"
      controller: 'BaseController'
