<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h3">Заявка</div>
                    <div class="form-group">
                       <form>
                       <input class="form-control" v-model="name" placeholder="Имя*"><br>
                       <input class="form-control" v-model="phone" placeholder="Телефон*"><br>
                       <textarea class="form-control" v-model="message" placeholder="Сообщение*"></textarea><br>
                       <a v-if="name != ''&&phone !=''&&message !=''" class="btn btn-outline-success" @click="submit">Отправить</a>
                       <a v-else class="btn btn-outline-success disabled" disabled>Отправить</a>
                       </form>
                    </div>
                    <div v-if="errors && errors.length">
                     <p v-for="error of errors">
                         {{error.message}}
                     </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
        data() {
            return {
                    name: '',
                    phone: '',
                    message: '',
                    errors: []
            }
        },
        methods: {
            submit() {
                axios
                .post('/app', {
                    'name': this.name,
                    'phone': this.phone,
                    'message': this.message
                })
                .then(response => {
                    alert('Заявка успешно отправлена!');
                    this.errors = [];
                })
                .catch(e => {
                    this.errors.push(e);
                    alert('Ошибка: ' + e)
                })
            }
          }
      }
</script>
