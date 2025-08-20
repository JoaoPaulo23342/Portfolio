#!/usr/bin/env node

// Custom build script for Vercel deployment
// This bypasses permission issues by using Tailwind CSS programmatically

const fs = require('fs');
const path = require('path');

console.log('🚀 Starting custom build process...');

async function build() {
  try {
    // Ensure dist directory exists
    const distDir = path.join(__dirname, 'dist');
    if (!fs.existsSync(distDir)) {
      fs.mkdirSync(distDir, { recursive: true });
      console.log('📁 Created dist directory');
    }

    // Import Tailwind CSS and PostCSS
    const postcss = require('postcss');
    const tailwindcss = require('tailwindcss');
    
    // Read input CSS
    const inputPath = path.join(__dirname, 'src', 'input.css');
    const outputPath = path.join(__dirname, 'dist', 'output.css');
    
    console.log('🎨 Building CSS with Tailwind...');
    
    const css = fs.readFileSync(inputPath, 'utf8');
    
    // Process CSS with PostCSS and Tailwind (minimal setup)
    const result = await postcss([
      tailwindcss
    ]).process(css, {
      from: inputPath,
      to: outputPath
    });
    
    // Minify CSS manually (simple approach)
    let minifiedCss = result.css
      .replace(/\s+/g, ' ')
      .replace(/;\s*}/g, '}')
      .replace(/\s*{\s*/g, '{')
      .replace(/;\s*/g, ';')
      .replace(/,\s*/g, ',')
      .trim();
    
    // Write output
    fs.writeFileSync(outputPath, minifiedCss);
    
    console.log('✅ Build completed successfully!');
    console.log(`📦 Output size: ${(minifiedCss.length / 1024).toFixed(2)} KB`);
    
  } catch (error) {
    console.error('❌ Build failed:', error.message);
    console.error(error.stack);
    process.exit(1);
  }
}

build();