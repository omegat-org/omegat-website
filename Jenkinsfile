node {
    // Lots of errors in the localized version. Ignore the results for now...
    def ignoreHtmlCheck = true

    def gitHost = 'https://github.com/briacp/omegat-website'

    // use date for tag
    def tag = new Date().format("yyyyMMddHHmm")

   stage('Preparation') {
      git "${gitHost}.git"
   }

   stage('Build') {
        if (ignoreHtmlCheck) {
            echo 'Building Jekyll website...'
            sh script:'bundle exec rake build:production'
        }
        else {
            echo 'Building and testing Jekyll website...'
            sh script:'bundle exec rake test:production'
        }
   }

   stage('Copy gh-pages') {

        echo 'Checking out gh-pages branch'
        def exists = fileExists '_gh-pages'
        if (!exists){
            new File('_gh-pages').mkdir()
        }

        dir ('_gh-pages') {
            echo 'Checkout gh-pages branch from GitHub...'
            git branch: 'gh-pages', changelog: false, poll: false, credentialsId: 'github-token', url: gitHost

            echo 'Copy built site to gh-pages...'
            sh 'cp -r ../_site/* .'

            withCredentials([usernamePassword(credentialsId: 'github-token', usernameVariable: 'GIT_USERNAME', passwordVariable: 'GIT_PASSWORD')]) {
                //sh 'git checkout master'
                sh 'git commit -am "Updated gh-pages ${tag}"'
            }
        }
   }

   stage('Push site online') {
        // https://issues.jenkins-ci.org/browse/JENKINS-28335
        withCredentials([usernamePassword(credentialsId: 'github-token', usernameVariable: 'GIT_USERNAME', passwordVariable: 'GIT_PASSWORD')]) {
            // configure the git credentials, these are cached in RAM for several minutes to use
            // this is required until https://issues.jenkins-ci.org/browse/JENKINS-28335 is resolved upstream
            sh "echo 'protocol=https\nhost=github.com\nusername=${GIT_USERNAME}\npassword=${GIT_PASSWORD}\n\n' | git credential approve "

            sh "git tag -a ${tag} -m '${USER} tagging'"
            sh "git push --tags"

        }

  }
}

