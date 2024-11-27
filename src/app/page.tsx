import React, { useState } from 'react';

export default function Home() {
  const [fileName, setFileName] = useState<string | null>(null);

  const handleFileChange = (event: React.ChangeEvent<HTMLInputElement>) => {
    if (event.target.files && event.target.files.length > 0) {
      setFileName(event.target.files[0].name);
    }
  };

  return (
    <div>
      <h1>Upload File</h1>
      <input type="file" onChange={handleFileChange} />
      {fileName && <p>File yang diunggah: {fileName}</p>}
    </div>
  );
}
