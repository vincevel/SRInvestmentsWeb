# SR Investments Web Financial Tracking App

## Overview
This application enables customers to track financial transactions, including deposits and withdrawals, with incentives like bonuses or dividends for retaining funds. It features a REST API integration with ManyChat, a mobile chatbot serving as the primary customer touchpoint for recording transactions. Additionally, a backend admin section allows verification of deposits and withdrawals, supported by attachments such as receipts. Users can access detailed summaries and reports of their financial activities.

## Problem Solved
Customers needed a reliable, user-friendly platform to monitor financial data online, track money earned and withdrawn, and verify transactions. This system provides an efficient solution with a chatbot interface for customers and an admin backend for transaction validation.

## Features
- Record and track deposits and withdrawals via ManyChat integration.
- Calculate and display bonuses/dividends for funds retained in the system.
- Generate summary reports for financial overview.
- Admin backend for verifying transactions with receipt attachments.
- User-friendly interface for easy navigation and data access.

## Technologies Used
- **PHP**: Backend logic and server-side processing.
- **MySQL**: Database for storing transaction and user data.
- **CSS**: Styling for a responsive and visually appealing interface.
- **JavaScript / Vue.js**: Dynamic frontend for interactive user experiences.
- **ManyChat REST API**: Integration for customer-facing transaction input via chatbot.

## Installation
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/vincevel/SRInvestmentsWeb.git
   ```
2. **Navigate to the Project Directory**:
   ```bash
   cd SRInvestmentsWeb
   ```
3. **Set Up the Database**:
   - Create a MySQL database (e.g., `sr_investments_db`).
   - Import the `schema.sql` file to set up the necessary tables:
     ```bash
     mysql -u your-username -p sr_investments_db < schema.sql
     ```
4. **Configure Environment**:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with your database credentials and ManyChat API key:
     ```env
     DB_HOST=localhost
     DB_NAME=sr_investments_db
     DB_USER=your-username
     DB_PASS=your-password
     MANYCHAT_API_KEY=your-manychat-api-key
     ```
5. **Install Dependencies**:
   - Ensure PHP and Composer are installed.
   - Run the following to install PHP dependencies:
     ```bash
     composer install
     ```
   - For frontend dependencies (Vue.js), run:
     ```bash
     npm install
     ```
6. **Set Up Web Server**:
   - Configure your web server (e.g., Apache or Nginx) to point to the `public/` directory.
   - For example, in Apache, set the `DocumentRoot` to `/path/to/sr-investments/public`.
7. **Run the Application**:
   - Start your web server and access the app via `http://localhost` or your configured domain.
   - Optionally, use PHP's built-in server for development:
     ```bash
     php -S localhost:8000 -t public
     ```
8. **Build Frontend Assets**:
   - Compile Vue.js assets:
     ```bash
     npm run dev
     ```
9. **Configure ManyChat Integration**:
   - Set up a ManyChat account and obtain an API key.
   - Ensure the chatbot is configured to send transaction data to the app's REST API endpoints (e.g., `/api/deposit`, `/api/withdraw`).

## Usage
- **Customers**: Use the ManyChat chatbot on mobile devices to record deposits and withdrawals, uploading receipts as needed.
- **Admins**: Log into the backend admin section to verify transactions by reviewing attached receipts.
- View incentives (bonuses/dividends) for retained funds.
- Access summary reports to analyze financial activity via the web interface.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue to discuss improvements or bugs.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
