#!/bin/bash

# WealthPark Corporate Site v4 - Local Development Setup Script
# This script automates the setup process for team members

set -e  # Exit on error

echo "=========================================="
echo "WealthPark Corporate Site v4 Setup"
echo "=========================================="
echo ""

# Step 1: Check Docker
echo "✓ Checking Docker..."
if ! docker info > /dev/null 2>&1; then
    echo "❌ Error: Docker is not running."
    echo "   Please start Docker Desktop and run this script again."
    exit 1
fi
echo "✅ Docker is running"
echo ""

# Step 2: Check database dump
echo "✓ Checking database dump file..."
if [ ! -f "wealthparkincltd.sql" ]; then
    echo "❌ Error: wealthparkincltd.sql not found."
    echo ""
    echo "Please download the database dump:"
    echo "1. Download from Google Drive: https://drive.google.com/file/d/1X5NSWYlyE1yCHhc8e08YJCbOaOP8Ain8/view?usp=drive_link"
    echo "2. Place it in the project root: $(pwd)/wealthparkincltd.sql"
    echo "3. Run this script again: ./setup.sh"
    echo ""
    exit 1
fi
echo "✅ Database dump found ($(du -h wealthparkincltd.sql | cut -f1))"
echo ""

# Step 3: Start Docker containers
echo "✓ Starting Docker containers..."
docker-compose up -d
echo "✅ Containers started"
echo ""

# Step 4: Wait for database to be ready
echo "✓ Waiting for database to be ready..."
sleep 10

# Check if database is accessible
until docker exec corporate-v4-db mysql -uwordpress -pwordpress -e "SELECT 1" > /dev/null 2>&1; do
    echo "   Waiting for database..."
    sleep 3
done
echo "✅ Database is ready"
echo ""

# Step 5: Check if database is already imported
echo "✓ Checking database status..."
TABLE_COUNT=$(docker exec corporate-v4-db mysql -uwordpress -pwordpress wordpress -e "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'wordpress';" 2>/dev/null | tail -1)

if [ "$TABLE_COUNT" -gt 10 ]; then
    echo "✅ Database already imported ($TABLE_COUNT tables found)"
    echo ""
else
    echo "✓ Importing database (this may take a few minutes)..."
    docker exec -i corporate-v4-db mysql -uwordpress -pwordpress wordpress < wealthparkincltd.sql
    echo "✅ Database imported successfully"
    echo ""
fi

# Step 6: Verify setup
echo "✓ Verifying setup..."
POST_COUNT=$(docker exec corporate-v4-db mysql -uwordpress -pwordpress wordpress -e "SELECT COUNT(*) FROM SERVMASK_PREFIX_posts WHERE post_status = 'publish';" 2>/dev/null | tail -1)
echo "✅ Found $POST_COUNT published posts in database"
echo ""

# Step 7: Done!
echo "=========================================="
echo "✅ Setup Complete!"
echo "=========================================="
echo ""
echo "Access your local site:"
echo "  Frontend:   http://localhost:8080"
echo "  Admin:      http://localhost:8080/ja/amaterasu18/"
echo ""
echo "Useful commands:"
echo "  Stop:       docker-compose down"
echo "  Restart:    docker-compose restart"
echo "  Logs:       docker-compose logs -f wordpress"
echo ""
