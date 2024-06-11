<template>
  <div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Ocorrências de Segurança</h1>
    <div class="grid grid-cols-4 gap-4">
      <button
        v-for="occurrence in occurrences"
        :key="occurrence.id"
        @click="handleClick(occurrence.id)"
        class="bg-blue-500 text-white p-6 flex items-center justify-center rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300"
      >
        {{ occurrence.name }}
      </button>
    </div>
  </div>
</template>
  
  <script>
  export default {
    data() {
      return {
        occurrences: [
          { id: 1, name: 'Roubo ou Furto' },
          { id: 2, name: 'Acidente' },
          { id: 3, name: 'Vandalismo' },
          { id: 4, name: 'Violência' },
          { id: 5, name: 'Ameaça' },
          { id: 6, name: 'Buracos na Via' },
          { id: 7, name: 'Incendio' },
          { id: 8, name: 'Emergencia Medica' },
          { id: 9, name: 'Falsificação' },
          { id: 10, name: 'Atividade Suspeita' },
          { id: 11, name: 'Sequestro' },
          { id: 12, name: 'Assédio' },
        ],
      };
    },
    methods: {
    handleClick(occurrenceId) {
      this.$emit('occurrence-clicked', occurrenceId);
    },
  },
  };
  </script>
  
  <style scoped>
  </style>
  