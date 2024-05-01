let mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.postCss(
    "resources/css/app.css", // File masukan (input file)
    "css", // Folder keluaran (output folder)
    [tailwindcss("tailwind.config.js")] // Plugin Tailwind CSS
)

mix.browserSync('127.0.0.1:8000');