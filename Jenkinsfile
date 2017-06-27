node {
   stage('Preparation') {
      git 'https://github.com/omegat-org/omegat-website.git'
   }

   stage('Build') {

        echo 'Building Jekyll website...'
        sh 'bundle exec rake build:production'

        echo 'Checking out gh-pages branch'        
        def exists = fileExists '_gh-pages'
        if (!exists){
            new File('_gh-pages').mkdir()
        }
        dir ('_gh-pages') {
            echo 'Checkout gh-pages branch from GitHub...'
            git branch: 'gh-pages', changelog: false, poll: false, credentialsId: 'github-token', url: 'https://github.com/omegat-org/omegat-website'
            echo 'Copy built site to gh-pages...'
            sh 'cp -rv ../_site/* .'
        }
        
   }

   stage('Results') {
      
   }
}
