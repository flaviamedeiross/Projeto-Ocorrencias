<template>
  <div class="carousel" @mousedown="startDrag" @mousemove="onDrag" @mouseup="endDrag" @mouseleave="endDrag">
    <div v-for="(card, index) in cards" :key="index" class="card bg-white rounded-lg shadow-md p-6 text-center">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-black dark:text-black">{{ card.title }}</h5>
      <p class="font-normal text-black dark:text-black">{{ card.description }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Carousel',
  data() {
    return {
      cards: [
        {
          title: 'Briga entre pessoas no OXXO',
          description: 'Dois caras que não estudam na PUC começaram a brigar com os estudantes que estavam no OXXO, até brigarem fisicamente.'
        },
        {
          title: 'Situação Estranha',
          description: 'Cara outro dia eu vi uma menina sair correndo desesperada atras de um carro na frente do H15. Será que ela ta bem?.'
        },
        {
          title: 'Atropelamento em frente ao OXXO',
          description: 'Um Mobi branco atropelou uma aluna que estava na frente do oxxo. Ele não prestou socorro e saiu vazado. A garota foi pro Hospital.'
        }
      ],
      dragging: false,
      startPos: 0,
      currentTranslate: 0,
      prevTranslate: 0,
      animationID: 0,
      currentIndex: 0
    }
  },
  methods: {
    startDrag(e) {
      this.startPos = this.getPositionX(e);
      this.dragging = true;
      this.animationID = requestAnimationFrame(this.animation);
    },
    onDrag(e) {
      if (this.dragging) {
        const currentPosition = this.getPositionX(e);
        this.currentTranslate = this.prevTranslate + currentPosition - this.startPos;
      }
    },
    endDrag() {
      cancelAnimationFrame(this.animationID);
      this.dragging = false;
      const movedBy = this.currentTranslate - this.prevTranslate;

      if (movedBy < -100 && this.currentIndex < this.cards.length - 1) this.currentIndex += 1;
      if (movedBy > 100 && this.currentIndex > 0) this.currentIndex -= 1;

      this.setPositionByIndex();

      this.prevTranslate = this.currentTranslate;
    },
    getPositionX(e) {
      return e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
    },
    animation() {
      this.setSliderPosition();
      if (this.dragging) requestAnimationFrame(this.animation);
    },
    setSliderPosition() {
      this.$el.querySelector('.carousel').style.transform = `translateX(${this.currentTranslate}px)`;
    },
    setPositionByIndex() {
      this.currentTranslate = this.currentIndex * -window.innerWidth;
      this.prevTranslate = this.currentTranslate;
      this.setSliderPosition();
    }
  }
}
</script>

<style scoped>
.carousel {
  display: flex;
  overflow-x: scroll; /* Altere de 'hidden' para 'scroll' */
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  justify-content: flex-start; /* Altere de 'center' para 'flex-start' */
}

.card {
  scroll-snap-align: start;
  flex-shrink: 0;
  width: 50%; /* Ajuste este valor para controlar o quanto do próximo card é visível */
  height: auto;
  margin-right: 5%; /* Ajuste este valor para controlar o espaço entre os cards */
  border-radius: 10px;
  background: #fff;
  transform-origin: center center;
  transform: scale(1);
  transition: transform 0.5s;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #000; /* Cor do texto */
}
</style>
