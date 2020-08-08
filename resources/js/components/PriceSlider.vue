<template>
    <div>
        <div class="priceSlider">
            <vue-slider
                v-model="value"
                :min="minPrice"
                :max="maxPrice"
                tooltip="none"
            ></vue-slider>
        </div>

        <div class="inputs">
            <div class="input">
                <input
                    name="minPrice"
                    type="number"
                    v-model="value[0]"
                    class="input"
                />
            </div>
            <div class="input">
                <input
                    name="maxPrice"
                    type="number"
                    v-model="value[1]"
                    class="input"
                />
            </div>
        </div>
    </div>
</template>

<script>
import VueSlider from "vue-slider-component";
import "vue-slider-component/theme/default.css";

export default {
    props: {
        min: Number,
        max: Number,
        minValue: Number,
        maxValue: Number
    },
    data: function() {
        return {
            minPrice: this.min,
            maxPrice: this.max,
            value: [this.minValue, this.maxValue]
        };
    },
    components: {
        VueSlider
    }
};
</script>

<style lang="scss" scoped>
.priceSlider {
    padding: 0 5px;
}

.inputs {
    display: flex;
    margin: 0 -5px;

    .input {
        padding: 0 5px;
        flex: 1;

        input {
            display: block;
            width: 100%;
        }
    }
}
</style>
