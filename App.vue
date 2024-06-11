<template>
    <div id="app" class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">
      <OccurrenceButtons @occurrence-clicked="openModal" />
      <OccurrenceModal 
        v-if="isModalOpen"
        :occurrence-id="selectedOccurrenceId"
        @close-modal="closeModal"
        @save-occurrence="saveOccurrence"
      />
    </div>
  </template>
  
  <script>
  import OccurrenceButtons from '../Components/OccurrenceButtons.vue';
  import OccurrenceModal from '../Components/OccurrenceModal.vue';
  import axios from 'axios';
  
  export default {
    name: 'App',
    components: {
      OccurrenceButtons,
      OccurrenceModal,
    },
    data() {
      return {
        isModalOpen: false,
        selectedOccurrenceId: null,
      };
    },
    methods: {
      openModal(occurrenceId) {
        this.selectedOccurrenceId = occurrenceId;
        this.isModalOpen = true;
      },
      closeModal() {
        this.isModalOpen = false;
        this.selectedOccurrenceId = null;
      },
      async saveOccurrence(data) {
        try {
          const response = await axios.post('/ocorrencias', data);
          console.log(response.data.message);
          this.closeModal();
        } catch (error) {
          console.error('Erro ao salvar ocorrência:', error.response.data);
        }
      },
    },
  };
  </script>
  
  <style>
  /* Estilizações globais, se necessário */
  </style>
  