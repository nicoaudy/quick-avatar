<template>
    <div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" @change="fileChange">

            <div class="help-block">
                Help
            </div>
        </div>

        <div>
            <input type="hidden" name="avatar_id">
            <img class="avatar" alt="Current avatar">
        </div>
    </div>
</template>

<script>
    import upload from '../mixins/upload.js'

    export default {
        mixins: [
            upload
        ],
        methods: {
            fileChange (e) {
                this.upload(e)
            }
        }
    }
</script>
