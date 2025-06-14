<template>
    <section class="bg-black text-white font-sans min-h-screen py-10">
        <header class="bg-amber-700 text-white text-center text-3xl font-bold py-6 border-b-4 border-amber-900 shadow-md">
            About Us
        </header>

        <div class="max-w-4xl mx-auto mt-8 p-6 border-l-4 border-green-500 bg-gray-900 rounded-md shadow-sm">
            <p class="text-lg leading-relaxed text-gray-100">
                At <strong>[Your Company Name]</strong>, we believe great things happen when passion meets purpose. Founded on <strong>June 12th, 2021</strong>,
                our journey began with a simple idea: to create <em>[what you do/sell/offer]</em> that not only meets expectations—but exceeds them.
                <br /><br />
                Today, we’re proud to be a trusted name in <em>[your industry or niche]</em>, known for our dedication to quality, innovation, and genuine customer care.
                We’re more than just a <em>[product/service]</em> provider—we're thinkers, builders, creators, and problem-solvers.
                <br /><br />
                Whether we’re <em>[designing solutions / handcrafting products / solving challenges]</em>, our goal remains the same: to add value and earn your trust.
                Our core values—<strong>integrity, creativity, and excellence</strong>—guide everything we do. Thanks for being part of our story.
            </p>
        </div>

        <div class="max-w-4xl mx-auto mt-8 p-6 border-l-4 border-green-500 bg-gray-900 rounded-md shadow-sm">
            <h2 class="text-2xl font-semibold text-center text-white mb-4">Our Team</h2>
            <p class="text-lg leading-relaxed text-gray-100">
                Welcome! We are <strong>[Team Name]</strong>, a group of passionate professionals focused on <em>[mission/focus]</em>.
                Our team includes <strong>[number]</strong> talented individuals with diverse expertise in <em>[key areas]</em>.
                <br /><br />
                United by our values of <strong>[collaboration, integrity, innovation]</strong>, we work collaboratively to <em>[purpose or goal]</em>,
                delivering high-quality outcomes through creativity and continuous improvement.
            </p>
        </div>

        <div class="max-w-4xl mx-auto mt-8 p-6 border-l-4 border-green-500 bg-gray-900 rounded-md shadow-sm">
            <h2 class="text-2xl font-semibold text-center text-white mb-4">Our Services</h2>
            <ul class="list-disc list-inside text-lg text-gray-100 space-y-1">
                <li>Social Media Marketing</li>
                <li>Content Creation</li>
                <li>SEO (Search Engine Optimization)</li>
                <li>Paid Advertising (Google Ads, Facebook Ads)</li>
                <li>Email Marketing</li>
                <li>Brand Strategy & Consulting</li>
                <li>Digital Marketing</li>
                <li>24/7 Technical Support</li>
                <li>Network Setup & Maintenance</li>
                <li>Cloud Services</li>
                <li>Cybersecurity Solutions</li>
                <li>Hardware & Software Installation</li>
                <li>Data Backup & Recovery</li>
                <li>Data Migration</li>
            </ul>
        </div>
        <!-- Go Back Button -->
        <div class="max-w-4xl mx-auto mt-8 text-center">
            <Link href="/dashboard"
                class="bg-amber-700 hover:bg-amber-800 text-white font-bold py-2 px-6 rounded shadow-md transition duration-200"
            >
                ← Go Back
            </Link>
        </div>
    </section>
</template>
<script setup lang="ts">
import {Link} from '@inertiajs/vue3'
</script>
