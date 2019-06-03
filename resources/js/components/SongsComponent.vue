<template>
    <div>
        <ul class="list-group list-group-flush">
            <div v-for="song in songs">
                <li class="list-group-item">
                    

                    <th>
                        <tr>
                            <td>{{ song.titulo }}</td>
                            <td>
                                <b-button variant="link" v-on:click="datos(song)" v-b-modal.modal-1>
                                    <i class="fa fa-volume-up"></i>
                                </b-button>
                            </td>
                            <td>
                                <b-button variant="link">
                                    <i class="fa fa-download"></i>
                                </b-button>
                            </td>
                            <td></td>
                        </tr>
                    </th>
                </li>
            </div>
        </ul>
        <div>
            <b-modal id="modal-1" :title="audio.titulo" centered hide-footer>
                <audio controls :src="audio.url"></audio>
            </b-modal>
        </div>
  
    </div>
</template>


<script>
    export default {
        name: 'app',
        props: ['songs'],
        data() {
            return {
                audio: '',
            }
        },
        methods: {
            datos(song) {
                console.log(song);
                this.audio = song;
            }
        }
    }
</script>

