pipeline {
    agent { label "Slave-2" }

    environment {
        PREVIOUS_BUILD_NUMBER = '%BUILD_NUMBER%-1'
    }
    
    stages {
        stage('Build') {
            steps {
                bat "docker build -t vikasdsdocker/myfirstpipeline:%BUILD_NUMBER% F:\\xampp\\htdocs\\devops\\JENKINS-SLAVE\\SLAVE-2\\workspace\\My-First-Pipeline"
            }
        }
        stage('Deploy') {
            steps {
                bat 'docker service update --image vikasdsdocker/myfirstpipeline:%BUILD_NUMBER% myfirstpipelineservice || docker service create --name myfirstpipelineservice -p 86:80 --replicas 2  vikasdsdocker/myfirstpipeline:%BUILD_NUMBER%'
                bat "docker rmi -f vikasdsdocker/myfirstpipeline:%PREVIOUS_BUILD_NUMBER% || true"
            }
        }
        
    }
}