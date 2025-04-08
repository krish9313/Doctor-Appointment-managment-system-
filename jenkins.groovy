pipeline {
    agent { label 'krish' }  // Runs on agent 'yash'

    stages {    
        stage('Clone Repository') {
            steps {
                sh "pwd"
                sh "rm -rf Doctor-Appointment-managment-system && git clone https://github.com/krish9313/Doctor-Appointment-managment-system.git"
            }
        }

        stage('Build/Run') {
            steps {
                sh "cd Doctor-Appointment-managment-system && docker compose up --build -d"
           
            }
        }
        
        stage('Initialize Database') {
            steps {
                sh "docker exec -i mysql_db mysql < Doctor-Appointment-managment-system/Sql/sql.sql"
            }
        }
    }
}
