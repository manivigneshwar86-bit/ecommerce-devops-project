pipeline {
    agent any

    stages {

        stage('Clone Repository') {
            steps {
                git branch: 'main',
                url: 'https://github.com/manivigneshwar86-bit/ecommerce-devops-project.git'
            }
        }

        stage('Force Remove Old Containers') {
            steps {
                sh 'docker rm -f apache-site nginx-site prometheus grafana || true'
            }
        }

        stage('Build Containers') {
            steps {
                sh 'docker-compose build'
            }
        }

        stage('Deploy Containers') {
            steps {
                sh 'docker-compose up -d'
            }
        }

    }
}
