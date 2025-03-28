<template>

    <div v-for="item in posts" class="col-xl-4 col-md-6">
        <div  class="invest-card">
            <div class="invest-card-thumb">
                <a target="_blank" :href="item.link" class="plan-link"></a>
                <img :src="item.image" alt="image" />

                <div class="thumb-bottom">
                    <h4 class="title"><a target="_blank" :href="item.link"> {{item.title}}</a></h4>
<!--                    <p class="location"><i class="bi bi-geo-alt"></i> Studentski Grad</p>
                    <div class="property-ratings">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-white">(0 Reviews)</span>
                    </div>-->
                </div>
            </div>
            <div class="invest-card-content">
                <div class="return-rate">
<!--                    <div>
                        <p>Expected Rental Income</p>
                        <h4 class="return-amount">
                            5.00 %
                        </h4>
                    </div>
                    <a
                        href="https://crowdsq.com/?msclkid=f26c6a76d23b132b69f90f112c1537fe#0"
                        class="calculate-btn"
                        data-plan='{"id":8,"plan_name":"1-bedroom in Student city -  55 sqm","views":"258","amount_type":"0","minimum_amount":"5000.00000000","maximum_amount":"96300.00000000","amount":null,"return_interest":"5.00000000","interest_status":"percentage","return_for":"0","how_many_time":null,"every_time":"7","capital_back":"0","status":"1","property":{"amnities":{"Price":"96300","Square meters":"55","Rooms":"2","Floor":"3"},"address":"Studentski grad","details":"Fully furnished apartment with a living room, bedroom and bathroom. The property is located close to the Winter Palace, National Sports Academy, universities, supermarkets and stores.","icons":["fas fa-tag","fas fa-ruler","fas fa-booth-curtain","fas fa-sort-circle"]},"image":"64f72719d42711693919001.jpg","gallery":[{"id":1,"src":"https:\/\/crowdsq.com\/asset\/images\/gallery\/64f72719855d01693919001.jpg","image":"64f72719855d01693919001.jpg"},{"id":2,"src":"https:\/\/crowdsq.com\/asset\/images\/gallery\/64f7271992cdd1693919001.jpg","image":"64f7271992cdd1693919001.jpg"},{"id":3,"src":"https:\/\/crowdsq.com\/asset\/images\/gallery\/64f727199d8111693919001.jpg","image":"64f727199d8111693919001.jpg"},{"id":4,"src":"https:\/\/crowdsq.com\/asset\/images\/gallery\/64f72719a85911693919001.jpg","image":"64f72719a85911693919001.jpg"},{"id":5,"src":"https:\/\/crowdsq.com\/asset\/images\/gallery\/64f72719ae88a1693919001.jpg","image":"64f72719ae88a1693919001.jpg"},{"id":6,"src":"https:\/\/crowdsq.com\/asset\/images\/gallery\/64f72719b944c1693919001.jpg","image":"64f72719b944c1693919001.jpg"},{"id":7,"src":"https:\/\/crowdsq.com\/asset\/images\/gallery\/64f72719bf5901693919001.jpg","image":"64f72719bf5901693919001.jpg"},{"id":8,"src":"https:\/\/crowdsq.com\/asset\/images\/gallery\/64f72719c9bf11693919001.jpg","image":"64f72719c9bf11693919001.jpg"}],"is_featured":"0","map":null,"created_at":"2023-09-05T13:03:21.000000Z","updated_at":"2023-11-29T23:45:34.000000Z","reviews":[]}'
                    >
                        <i class="fas fa-calculator"></i>Investment Calculator
                    </a>-->
                </div>

                <div class="other-options">
<!--                    <div class="single-option">
                        <p>Target Duration</p>
                        <h6>year</h6>
                    </div>
                    <div class="single-option">
                        <p>Minimum Amount</p>
                        <h6>
                            <span> 5,000.00 EUR</span>
                        </h6>
                    </div>
                    <div class="single-option">
                        <p>Return For</p>
                        <h6>
                            Period
                        </h6>
                    </div>
                    <div class="single-option">
                        <p>Capital Back</p>
                        <h6>
                            No
                        </h6>
                    </div>-->
                    {{item.excerpt}}
                </div>
            </div>
            <div class="invest-card-footer">
                <div>
                    <a target="_blank" :href="item.link" class="cmn-btn2 w-100 btn-sm">Learn More</a>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    name: "post_short_view",
    data(){
        return {
            posts:[]
        }
    },
methods:{
        async load() {
            try {
                let res = await axios.get('api/post');
               // console.log(res);
                this.posts=res.data;
            } catch (e) {

            }
        },
},
    mounted() {
       this.load();
    }
}
</script>

<style scoped>

</style>
