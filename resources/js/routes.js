import Home from './components/profile/ProfileCart.vue';
import Profile from './components/profile/ProfileInfo.vue';
import Measurement from './components/profile/ProfileMeasurement.vue';

export const routes = [
    { path: '/', component: Home },
    { path: '/profile', component: Profile },
    { path: '/measurement', component: Measurement },
];
