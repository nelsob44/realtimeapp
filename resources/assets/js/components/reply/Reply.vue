<template>
    <div class="mt-3">
        <v-card>
            <v-card-title>
                <div class="headline">{{data.user}}</div>
                <div class="ml-2">said {{data.created_at}}</div>
            </v-card-title>
            <v-divider></v-divider>
            <v-card-text v-html="data.reply"></v-card-text>

            <v-divider></v-divider>
                <v-card-actions v-if="own">
                    <v-btn icon small>
                        <v-icon color="orange">edit</v-icon>
                    </v-btn>
                    <v-btn icon small>
                        <v-icon color="red">delete</v-icon>
                    </v-btn>
                </v-card-actions>
        </v-card>
    </div>
</template>

<script>
export default {
    props:['data'],
    data(){
        return {
            own: User.own(this.data.user_id)
        }
    }
}
</script>

<style>

</style>
