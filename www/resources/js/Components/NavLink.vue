<template>
    <li>
      <a :href="url" class="block py-2 px-4 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">{{ name }}</a>
    </li>
  </template>
  
  <script>
  export default {
    name: 'NavLink',
    props: {
      name: String,
      url: String,
    },
  };
  </script>
  
  <style scoped>
  a {
    display: block;
    padding: 8px 16px;
    text-decoration: none;
    color: #666666;
  }
  a:hover {
    color: #333333;
    background-color: rgba(0, 0, 0, 0.1);
  }
  </style>
  