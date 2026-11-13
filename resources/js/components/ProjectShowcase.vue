<script setup>
import { computed, ref } from 'vue';

const filters = [
    { label: 'All projects', value: 'all' },
    { label: 'Backend', value: 'backend' },
    { label: 'Education', value: 'education' },
    { label: 'Portfolio', value: 'portfolio' },
    { label: 'Tools', value: 'tools' },
    { label: 'E-commerce', value: 'ecommerce' },
];

const projects = [
    {
        number: '01',
        title: 'HabeshaCart',
        category: 'ecommerce',
        categoryLabel: 'E-COMMERCE / ETHIOPIAN MARKETPLACE',
        image: '/images/projects/habeshacart-preview.svg',
        imageAlt: 'HabeshaCart Ethiopian marketplace storefront preview',
        description: 'A Laravel-powered marketplace connecting shoppers and vendors, with product discovery, a shopping cart, wishlists, order management, and Telebirr payments.',
        technologies: ['Laravel', 'PHP', 'Blade', 'Alpine.js'],
        repository: 'https://github.com/kindalemtazeb-ops/laravel-ecommerce',
    },
    {
        number: '02',
        title: 'Banking Management System',
        category: 'backend',
        categoryLabel: 'BANKING / FINTECH',
        image: '/images/projects/bank-dashboard.svg',
        imageAlt: 'Preview of the ADWA Bank management dashboard',
        description: 'A Laravel banking management platform with secure authentication, role-based controls, customer accounts, inter-account transfers, real-time balance calculations, and transaction records.',
        technologies: ['Laravel', 'PHP', 'MySQL'],
        repository: 'https://github.com/kindalemtazeb-ops/ADWA_BANK',
    },
    {
        number: '03',
        title: 'Student Registration System',
        category: 'education',
        categoryLabel: 'EDUCATION / MANAGEMENT',
        image: '/images/projects/student-dashboard.svg',
        imageAlt: 'Preview of the student registration dashboard',
        description: 'A student registration and information management system built with PHP and Laravel. It supports student enrollment, academic records, and organized access to student information.',
        technologies: ['Laravel', 'PHP', 'MySQL'],
        repository: 'https://github.com/kindalemtazeb-ops/kindalemtazeb-ops-student_registration',
    },
    {
        number: '04',
        title: 'Personal Portfolio',
        category: 'portfolio',
        categoryLabel: 'WEB / PERSONAL BRAND',
        image: '/images/projects/portfolio-preview.svg',
        imageAlt: "Illustrated preview of Kindalem's developer portfolio",
        description: 'A responsive developer portfolio introducing my background as a Computer Science student, the technologies I use, selected projects, and ways to get in touch.',
        technologies: ['Laravel', 'Tailwind CSS', 'Vue.js'],
        repository: 'https://github.com/kindalemtazeb-ops/my-portfolio',
    },
    {
        number: '05',
        title: 'Modern Calculator',
        category: 'tools',
        categoryLabel: 'TOOLS / FRONT-END',
        image: '/images/projects/calculator-preview.svg',
        imageAlt: 'Illustrated modern calculator project preview',
        description: 'A compact calculator project focused on a clear interface and everyday calculations.',
        technologies: ['HTML5', 'CSS3', 'JavaScript'],
        repository: 'https://github.com/kindalemtazeb-ops/modern-calculator',
    },
];

const selectedFilter = ref('all');
const visibleProjects = computed(() => {
    if (selectedFilter.value === 'all') {
        return projects;
    }

    return projects.filter((project) => project.category === selectedFilter.value);
});
</script>

<template>
    <div class="project-showcase" v-cloak>
        <div class="section-heading-row">
            <div>
                <p class="section-index">06 / SELECTED WORK</p>
                <h2 class="section-title">Selected projects<span>.</span></h2>
                <p class="showcase-intro">A few practical ideas I've turned into working software.</p>
            </div>
            <a href="https://github.com/kindalemtazeb-ops?tab=repositories" target="_blank" rel="noopener noreferrer" class="text-link">
                More on GitHub <i class="fas fa-arrow-up-right-from-square"></i>
            </a>
        </div>

        <div class="project-toolbar">
            <div class="project-filters" role="group" aria-label="Filter projects by category">
                <button
                    v-for="filter in filters"
                    :key="filter.value"
                    type="button"
                    class="project-filter"
                    :class="{ 'project-filter-active': selectedFilter === filter.value }"
                    :aria-pressed="selectedFilter === filter.value"
                    @click="selectedFilter = filter.value"
                >
                    {{ filter.label }}
                </button>
            </div>
            <p class="project-count" aria-live="polite">
                {{ visibleProjects.length }} {{ visibleProjects.length === 1 ? 'project' : 'projects' }}
            </p>
        </div>

        <div class="project-grid">
            <a
                v-for="project in visibleProjects"
                :key="project.number"
                class="project-card"
                :href="project.repository"
                target="_blank"
                rel="noopener noreferrer"
                :aria-label="`View ${project.title} source on GitHub`"
            >
                <div class="project-art">
                    <img class="project-cover" :src="project.image" :alt="project.imageAlt" loading="lazy" decoding="async">
                    <span class="project-number">{{ project.number }}</span>
                    <span class="project-art-caption">{{ project.categoryLabel }}</span>
                </div>
                <div class="project-info">
                    <div class="project-title-line">
                        <h3>{{ project.title }}</h3>
                        <span v-if="project.comingSoon" class="project-status">IN THE WORKS</span>
                        <span v-else class="project-repository-icon" aria-hidden="true">
                            <i class="fas fa-arrow-up-right-from-square"></i>
                        </span>
                    </div>
                    <p>{{ project.description }}</p>
                    <div class="project-tags">
                        <span v-for="technology in project.technologies" :key="technology">{{ technology }}</span>
                    </div>
                    <span class="project-code-link" aria-hidden="true">
                        View code <i class="fas fa-arrow-up-right-from-square"></i>
                    </span>
                </div>
            </a>
        </div>
    </div>
</template>
