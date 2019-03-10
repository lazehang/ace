<template>
    <div>
        <carousel-3d :controls-visible="true" :space="300" height="400" >
            <slide v-for="(player, index) in team" :index="index" :key="index">
                <figure data-toggle="modal" data-target="#playerDesc" @click="changeModal(player)">
                    <img :src="player.img" :alt="player.name">
                    <figcaption class="d-flex justify-content-center align-items-center">
                        <div class="number">{{player.number}}</div>
                        <div class="name">{{ player.name}}</div>
                    </figcaption>
                </figure>
                
            </slide>
        </carousel-3d>

        
     <!-- Modal -->
     <div class="modal fade" id="playerDesc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">Player Profile</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img :src="modal.img" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading">{{modal.name}} <small>| Nepal</small></h3>
                    <span>@instagram</span><br/>
                    <span><strong>Position: </strong></span>
                        <span class="label label-warning">{{ modal.position }}</span>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>
                        {{ modal.name }} is a young, fast paced player from Hongkong. He has been playing for FC ACE, since 2010.  
                    </p>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
<script>
import { Carousel3d, Slide } from 'vue-carousel-3d';

export default {
    data() {
        return {
            modal: {
                name: '',
                img: '',
                number: '',
                position: ''
            },
            team: [
                
                 {
                    name: 'Jamie Vardy',
                    number: 10,
                    img: '/images/vardy.png',
                    position: 'ST'
                },
                {
                    name: 'Arnautovic',
                    number: 10,
                    img: '/images/arnautovic.png',
                    position: 'LW'
                },
                 {
                    name: 'Jackson Rai',
                    number: 7,
                    img: 'https://www.asmonaco.com/wp-content/uploads/2018/09/utkus-id-vignette.png',
                    position: 'CAM'
                },
                 {
                    name: 'Jamie Vardy',
                    number: 10,
                    img: '/images/vardy.png',
                    position: 'ST'
                },
                 {
                    name: 'Samir Limbu',
                    number: 10,
                    img: '/images/gayle.png',
                    position: 'ST'
                }

            ]
        }
    },
    components: {
        Carousel3d, Slide
    }, 
    methods: {
        changeModal(player) {
            this.modal = player
        }
    }
}
</script>
<style lang="scss">
    #playerDesc {
        &.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
}
.modal-dialog {
  position: fixed;
  margin: 0;
  width: 100%;
  height: 100%;
  padding: 0;
  max-width: 100%;
}
.modal-content {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-radius: 0;
  box-shadow: none;
}
.modal-header {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  height: 50px;
  padding: 10px;
  background: #172b5f;
  border: 0;
  border-radius: 0;
}
.modal-title {
  font-weight: 300;
  font-size: 2em;
  color: #fff;
  line-height: 30px;
}
.modal-body {
  position: absolute;
  top: 50px;
  bottom: 60px;
  width: 100%;
  font-weight: 300;
  overflow: auto;
}
.modal-footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  height: 60px;
  padding: 10px;
  background: #f1f3f5;
}
    }
</style>