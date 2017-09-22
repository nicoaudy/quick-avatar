<template>
    <div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <div v-if="uploading">Processing</div>
            <input type="file" @change="fileChange">

            <div class="help-block">
                Help
            </div>
        </div>

        <div v-if="avatar.path">
            <input type="hidden" name="avatar_id" :value="avatar.id">
            <img class="avatar" :src="avatar.path" alt="Current avatar">
        </div>
    </div>
</template>

<script>
    import upload from '../mixins/upload.js'

    export default {
        props: [
            'currentAvatar'
        ],
        data() {
            return {
                errors: [],
                avatar: {
                    id: null,
                    path: this.currentAvatar
                }
            }
        },
        mixins: [
            upload
        ],
        methods: {
            fileChange (e) {
                this.upload(e).then(response => {
                    this.avatar = response.data.data
                }).catch((error) => {

                })
            }
        }
    }
</script>
