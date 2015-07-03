App = angular.module 'App', ['ui.router']

#configure staff
.config Config

# register services
#.service 'ServiceName', ServiceClass

# register factories
.factory 'Helper', () ->
  new Helper

# register controllers
.controller 'BaseController', BaseController

# directives
#.directive 'dateTimePicker', () ->
#  new DateTimePicker

# Some global staff here
App.run ['$rootScope', (rootScope) ->
  
]
