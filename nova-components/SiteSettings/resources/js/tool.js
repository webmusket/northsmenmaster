

Nova.booting((Vue, router, store) => {

  router.addRoutes([
    {
      name: 'site-settings',
      path: '/site-settings',
      component: require('./components/Tool'),
    },
  ])
})
