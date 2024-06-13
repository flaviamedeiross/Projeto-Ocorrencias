<template>
    <section class="base-section">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-6">
          <slot></slot>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: 'BaseSection',
  };
  </script>
  
  <style scoped>
  .base-section {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }
  .container {
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
  }
  </style>
  