import Vue from 'vue';
import {Tabs, Tab} from 'vue-tabs-component';

Nova.booting((Vue, router, store) => {
	Vue.component('tabs', Tabs);
	Vue.component('tab', Tab);
  router.addRoutes([
    {
      name: 'report',
      path: '/report',
      component: require('./components/Tool'),
    },
  ])
})
