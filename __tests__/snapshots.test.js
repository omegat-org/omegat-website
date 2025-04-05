const path = require("path");
const fs = require("fs");

function checkSnapshot(filePath) {
  describe(filePath + " Snapshot", () => {
    it("should match the saved snapshot", () => {
      const htmlContent = fs.readFileSync(filePath, "utf8");

      expect(htmlContent).toMatchSnapshot();
    });
  });
}

function isTestableFile(filePath) {
  let isFile = fs.existsSync(filePath) && fs.lstatSync(filePath).isFile();
  if (isFile) {
    return path.extname(filePath).toLowerCase() === ".html";
  }
  return false;
}

function findTestableFiles(directory) {
  try {
    const entries = fs.readdirSync(directory);

    let testableFiles = [];

    for (const entry of entries) {
      const entryPath = path.join(directory, entry);

      if (fs.existsSync(entryPath) && fs.lstatSync(entryPath).isDirectory()) {
        testableFiles.push(...findTestableFiles(entryPath));
      } else if (isTestableFile(entryPath)) {
        testableFiles.push(entryPath);
      }
    }
    return testableFiles;
  } catch (error) {
    console.error(`Error reading directory: ${error.message}`);
    return [];
  }
}

function checkSnapshotTestForPaths(filePaths) {
  filePaths.forEach((filePath) => {
    try {
      checkSnapshot(filePath);
    } catch (error) {
      console.error(`Error reading file ${filePath}: ${error.message}`);
    }
  });
}

function main() {
  const targetDir = path.join(__dirname, "../_site");

  const testableFiles = findTestableFiles(targetDir);

  if (testableFiles.length === 0) {
    console.error("No files found in the directory.");
    return;
  }

  checkSnapshotTestForPaths(testableFiles);
}

main();
