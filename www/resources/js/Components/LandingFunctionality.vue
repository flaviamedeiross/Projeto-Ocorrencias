<template>
    <div class="w-full lg:w-1/3 p-4">
      <div class="bg-white rounded-lg shadow-md p-6 text-center">
        <h3 class="text-xl font-bold mb-2">{{ title }}</h3>
        <p class="text-gray-600 mb-4">{{ description }}</p>
        <router-link :to="link" class="text-blue-500 underline">Saiba mais</router-link>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'LandingFunctionality',
    props: {
      title: {
        type: String,
        required: true
      },
      description: {
        type: String,
        required: true
      },
      link: {
        type: String,
        required: true
      }
    }
  };
  </script>
  
  <style scoped>
  /* Add any additional styling if necessary */
  </style>
  