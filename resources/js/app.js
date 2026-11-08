import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import ProjectShowcase from './components/ProjectShowcase.vue';

window.Alpine = Alpine;

Alpine.start();

const projectShowcase = document.querySelector('#project-showcase');

if (projectShowcase) {
    createApp(ProjectShowcase).mount(projectShowcase);
}
