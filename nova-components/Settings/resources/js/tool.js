import {Tabs, Tab} from 'vue-tabs-component'

Nova.booting((Vue, router, store) => {
	Vue.component('tabs', Tabs);
    Vue.component('tab', Tab);
  router.addRoutes([
    {
      name: 'settings',
      path: '/settings',
      component: require('./components/Tool'),
    },
  ])
})
