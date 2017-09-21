<template>
    <div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" @onchange="fileChange">

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
    export default {
        methods: {
            fileChange (e) {
                console.log(e)
            }
        }
    }
</script>
