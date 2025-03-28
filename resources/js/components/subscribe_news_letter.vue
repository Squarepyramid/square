<template>
    <div class="footer-box">
        <h4 class="title">Subscribe To Our Newsletter</h4>
        <form @submit.prevent="submit" class="subscribe-form">
            <input v-model="form.email" type="email" name="email" class="form-control subscribe-email" placeholder="Your email" />
            <button type="submit">  <loader :loading="isLoading" /><span v-if="!isLoading">Subscribe</span> </button>
        </form>
        <h6 class="text-white mt-4 mb-3">Social Links:</h6>
        <ul class="social-links">
            <li>
                <a href="https://www.facebook.com/crowdsq" target="_blank" class="twitter"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/crowdsq" target="_blank" class="twitter"><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li>
                <a href="https://twitter.com/crowd_square" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="https://www.youtube.com/@crowdsq" target="_blank" class="twitter"><i class="fab fa-youtube"></i></a>
            </li>
        </ul>
    </div>
</template>

<script>
import loader from "./opencomponent/loader/Loader.vue";
export default {
    components:{loader},
    name: "subscribe_news_letter",
    data(){
        return {
            isLoading:false,
            form:{},
        }
    },
    mounted() {
       // alert('hi');
    },
    methods:{
      async submit(){
            this.isLoading=true;
            let res = await axios.post('api/subscribe',this.form);
            this.isLoading=false;
        },
    }
}
</script>

<style scoped>

</style>
