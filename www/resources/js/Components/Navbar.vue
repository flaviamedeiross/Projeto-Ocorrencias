<template>
  <nav id="navbar" class="relative z-10 w-full text-neutral-800 bg-gray-300 py-2">
    <div class="flex flex-col max-w-screen-xl px-8 mx-auto lg:items-center lg:justify-between lg:flex-row">
      <div class="flex flex-col lg:flex-row items-center space-x-4 xl:space-x-8">
        <div class="w-full flex flex-row items-center justify-between py-2">
          <div>
            <ApplicationLogoV class="w-16 xl:w-16" />
          </div>
          <button class="rounded-lg lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <template v-if="!open">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
              </svg>
            </template>
            <template v-else>
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </template>
          </button>
        </div>
        <ul
          :class="[open ? 'flex' : 'hidden lg:flex']"
          class="w-full h-auto flex flex-col flex-grow lg:items-center pb-4 lg:pb-0 lg:justify-end lg:flex-row origin-top duration-300 xl:space-x-2 space-y-3 lg:space-y-0 lg:ml-4"
        >
          <NavLink name="Home" url="/" style="font-size: 2rem;" class="nav-link" />
          <NavLink name="Registrar Ocorrências" url="/app" style="font-size: 2rem;" class="nav-link" />
          <NavLink name="Dicas" url="/dicas" style="font-size: 2rem;" class="nav-link" />
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import ApplicationLogoV from '../Components/ApplicationLogoV.vue';
import NavLink from '../Components/NavLink.vue';

export default {
  name: 'Navbar',
  components: {
    ApplicationLogoV,
    NavLink,
  },
  data() {
    return {
      open: false,
      dropdownNavbar: false,
    };
  },
  methods: {
    dropdownToggler() {
      this.dropdownNavbar = !this.dropdownNavbar;
    },
  },
};
</script>

<style scoped>
nav {
  background-color: #E4E4E4;
  box-shadow: none;
}

ul {
  display: flex;
  flex-direction: column;
}

li {
  list-style-type: none;
}

.nav-link {
  color: #666666;
  text-decoration: none;
  font-weight: bold; /* Ensure bold text */
  white-space: nowrap; /* Prevent text from wrapping */
  margin-right: 1rem; /* Reduce margin to bring items closer */
  font-size: 2rem; /* Set font size */
}

.nav-link:hover {
  color: #333333;
  background-color: rgba(0, 0, 0, 0.1);
}

.group:hover .group-hover\:block {
  display: block;
}

@media (min-width: 1024px) {
  ul {
    flex-direction: row;
  }
}
</style>
