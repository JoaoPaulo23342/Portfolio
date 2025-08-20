#!/usr/bin/env node

// Custom build script for Vercel deployment
// This bypasses permission issues with node_modules/.bin/tailwindcss

const { execSync } = require('child_process');
const path = require('path');
const fs = require('fs');

console.log('🚀 Starting custom build process...');

try {
  // Ensure dist directory exists
  const distDir = path.join(__dirname, 'dist');
  if (!fs.existsSync(distDir)) {
    fs.mkdirSync(distDir, { recursive: true });
    console.log('📁 Created dist directory');
  }

  // Run Tailwind CSS build directly
  const tailwindPath = path.join(__dirname, 'node_modules', 'tailwindcss', 'lib', 'cli.js');
  const inputPath = path.join(__dirname, 'src', 'input.css');
  const outputPath = path.join(__dirname, 'dist', 'output.css');

  console.log('🎨 Building CSS with Tailwind...');
  
  const command = `node "${tailwindPath}" -i "${inputPath}" -o "${outputPath}" --minify`;
  
  execSync(command, { 
    stdio: 'inherit',
    cwd: __dirname
  });

  console.log('✅ Build completed successfully!');
  
} catch (error) {
  console.error('❌ Build failed:', error.message);
  process.exit(1);
}