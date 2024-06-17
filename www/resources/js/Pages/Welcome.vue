<template>
  <div class="w-full">
    <Navbar />
    <!-- Hero section -->
    <section id="hero" class="w-full pt-5 pb-3" style="background-color: #E4E4E4; margin-top: -50px;">
      <BaseSection>
        <div class="col-span-12 lg:col-span-6 mt-6 xl:mt-6 space-y-4 sm:space-y-6 px-6 text-center sm:text-left">
          <span
            data-aos="fade-right"
            data-aos-once="true"
            class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl text-gradient font-semibold uppercase"
          >
            BEM VINDO
          </span>
          <h1
            data-aos="fade-right"
            data-aos-once="true"
            class="text-[2.5rem] sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight capitalize sm:pr-8 xl:pr-10 mt-4"
          >
            Fique <span class="text-header-gradient">Seguro</span> Na PUCC
          </h1>
          <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="paragraph hidden sm:block">
            Somos uma comunidade que tem como objetivo informar sobre ocorrências no campus e ao seu redor, sinalizando os perigos que os estudantes podem enfrentar.
          </p>
        </div>
        <div class="hidden sm:block col-span-12 lg:col-span-6">
          <div class="w-full">
            <ApplicationLogoV
              data-aos="fade-up"
              data-aos-once="true"
              class="max-w-xs"
            />
          </div>
        </div>
      </BaseSection>
    </section>

    <!-- Functionalities Section -->
    <section class="max-w-screen-xl mx-auto px-2 sm:px-6 lg:px-0 py-6 sm:py-8 pb-20 rounded-[2.25rem] sm:rounded-xl bg-white shadow-lg sm:shadow-md transform lg:-translate-y-8" style="background-color: #ffffff;">
      <div class="w-full flex flex-col lg:flex-row items-center justify-center">
        <div class="w-full lg:w-1/2 p-4">
          <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <h3 class="text-xl font-bold mb-2">Registrar Ocorrência</h3>
            <p class="text-gray-600 mb-4">Clique para registrar alguma ocorrência do campus ou região.</p>
            <router-link to="/app" class="text-blue-500 underline">Saiba mais</router-link>
          </div>
        </div>
        <div class="w-full lg:w-1/2 p-4">
          <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <h3 class="text-xl font-bold mb-2">Dicas</h3>
            <p class="text-gray-600 mb-4">Veja dicas que podem te ajudar no dia a dia.</p>
            <router-link to="/dicas" class="text-blue-500 underline">Saiba mais</router-link>
          </div>
        </div>
      </div>
    </section>

    <!-- Carousel Section -->
    <section class="max-w-screen-xl mx-auto px-6 sm:px-6 lg:px-0 py-6 sm:py-8 pb-20 rounded-[2.25rem] sm:rounded-xl bg-white shadow-lg sm:shadow-md transform lg:-translate-y-8 mt-10" style="background-color: #ffffff;">
        <Carousel />
    </section>
  </div>
</template>

<script>
import Navbar from '../Components/Navbar.vue';
import BaseSection from '../Components/BaseSection.vue';
import ApplicationLogoV from '../Components/ApplicationLogoV.vue';
import Carousel from '../Components/Carousel.vue'; // Importe o componente aqui

export default {
  name: 'Welcome',
  components: {
    Navbar,
    BaseSection,
    ApplicationLogoV,
    Carousel, // Adicione o componente aqui
  },
  mounted() {
    this.initAOS();
  },
  methods: {
    initAOS() {
      const script = document.createElement('script');
      script.src = 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js';
      script.onload = () => {
        this.initializeAOS();
      };
      document.head.appendChild(script);
    },
    initializeAOS() {
      AOS.init({
        once: true,
        delay: 50,
        duration: 800,
        easing: 'ease-in-out',
      });
    }
  }
};
</script>

<style scoped>
.text-header-gradient {
  background: #2E4E77;
  background: linear-gradient(169.4deg, #84a6d3 -6.01%, #6992C6 36.87%, #446794 78.04%, #2E4E77 103.77%);
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.max-h-0 {
  max-height: 0;
}
.max-w-xs {
  max-width: 350px; 
  margin-left: 110px;
}

#hero img {
  transition: transform 0.5s ease-out;
}

#hero img.fade-in {
  transform: translate(0, 0);
}
</style>
